import Subtitulo from './Subtitulo'
import Slide from './Slide'
import styles from './content-slide.module.css'

const ContentSlide = ({ pluralWord }) => {
  return (
    <section className={`container-fluid ${styles.content_slide}`}>
      <Subtitulo text='Productos' />
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
                <span>Disponible en diámetros</span> de 400 mm a 2.000 mm
              </h3>
              <p>
                Estos {pluralWord} de PVC son altamente recomendados para
                grandes obras de infraestructura ya que poseen un gran diámetro
                y resistencia. El siguiente cuadro indica los diámetros
                disponibles aunque puede consultar por diámetros intermedios.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default ContentSlide
