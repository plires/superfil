<?php
// Run: docker compose exec -T php php /var/www/html/landings/tests/recaptcha-validation-test.php
// Exercises App::validateForm with fake siteverify responses (no network calls).
error_reporting(E_ALL);
set_error_handler(function ($severity, $message) {
  throw new ErrorException($message, 0, $severity);
});

require_once __DIR__ . '/../clases/app.php';

$app = new App();
$form = (object) ['name' => 'Test', 'email' => 'test@example.com', 'phone' => '123', 'comments' => 'hola'];
$recaptchaError = 'Error Recaptcha, volvé a intentar el envio por favor.';
$failures = 0;

function check($label, $condition) {
  global $failures;
  echo ($condition ? 'PASS ' : 'FAIL ') . $label . PHP_EOL;
  if (!$condition) {
    $failures++;
  }
}

function errorsFor($response) {
  global $app, $form;
  try {
    return $app->validateForm($response, $form);
  } catch (Throwable $th) {
    return ['EXCEPTION: ' . $th->getMessage()];
  }
}

$human = ['success' => true, 'score' => 0.9, 'action' => 'form_contacto'];
check('valid human token is accepted', errorsFor($human) === []);
check('score at threshold (0.5) is accepted', errorsFor(['score' => 0.5] + $human) === []);
check('low score (0.1) is rejected', errorsFor(['score' => 0.1] + $human) === [$recaptchaError]);
check('missing score is rejected', errorsFor(['success' => true, 'action' => 'form_contacto']) === [$recaptchaError]);
check('wrong action is rejected', errorsFor(['action' => 'login'] + $human) === [$recaptchaError]);
check('success=false is rejected', errorsFor(['success' => false] + $human) === [$recaptchaError]);
check('null siteverify response is rejected without PHP warnings', errorsFor(null) === [$recaptchaError]);
check('empty token is rejected without calling Google', $app->verifyRecaptcha('') === ['success' => false]);

$_ENV['RECAPTCHA_MIN_SCORE'] = '0.7';
check('RECAPTCHA_MIN_SCORE raises the threshold', errorsFor(['score' => 0.6] + $human) === [$recaptchaError]);
$_ENV['RECAPTCHA_MIN_SCORE'] = '-1';
check('out of range RECAPTCHA_MIN_SCORE falls back to 0.5', errorsFor(['score' => 0.1] + $human) === [$recaptchaError]);
unset($_ENV['RECAPTCHA_MIN_SCORE']);
check('non-string token is rejected without calling Google', $app->verifyRecaptcha(['x']) === ['success' => false]);

$invalidForm =(object) ['name' => '', 'email' => 'bad', 'phone' => '', 'comments' => ''];
check('form field errors still reported', count($app->validateForm($human, $invalidForm)) === 4);

echo $failures === 0 ? "ALL PASSED\n" : "$failures FAILED\n";
exit($failures === 0 ? 0 : 1);
