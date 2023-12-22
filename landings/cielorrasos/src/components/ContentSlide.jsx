import Subtitulo from './Subtitulo'
import Slide from './Slide'
import styles from './content-slide.module.css'

const ContentSlide = ({ word }) => {
  return (
    <section className={`container-fluid ${styles.content_slide}`}>
      <Subtitulo text='Características principales' />
      <div className={styles.faja}>
        <div className='container'>
          <div className='row'>
            <div
              data-aos='fade-up'
              className={`col-md-5 ${styles.column_content_slide}`}
            >
              <Slide />
            </div>
            <div data-aos='fade-up' className={`col-md-7 ${styles.data}`}>
              <h3>
                <span>Cielorrasos de PVC</span>
              </h3>
              <p>
                El <span>{word} Superfil</span> está acompañado por una familia
                de perfiles plásticos variados, como ser: perimetrales tipo
                &quot;U&quot;, uniones de tipo &quot;H&quot; y otras opciones de
                perfiles que aseguran una mayor rapidez en la colocación y
                excelentes terminaciones.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default ContentSlide
