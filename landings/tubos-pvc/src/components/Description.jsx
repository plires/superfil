import styles from './description.module.css'

const Description = ({ word, pluralWord }) => {
  return (
    <div data-aos='fade-up' className={styles.content_data}>
      <p>
        El <span>{word} de PVC Superfil</span> posee aspectos revolucionarios en
        cuanto a su concepción y proceso de fabricación. Estos {pluralWord}{' '}
        presentan una pared exterior perfilada e interior liso, fabricado a base
        de PVC rígido no plastificado como materia prima.
      </p>
      <img
        className={`img-fluid ${styles.img_tubos}`}
        src='./img/tubos-con-cuadricula.jpg'
        alt={`${pluralWord} de pvc de gran diametro`}
      />
    </div>
  )
}

export default Description
