import Formulario from './Formulario'
import styles from './first-content.module.css'

const FirstContent = ({ title, formLocation, event, altWord }) => {
  return (
    <section className={`container-fluid ${styles.first_content}`}>
      <img
        className={`img-fluid ${styles.img_mobile}`}
        src='./img/header.jpg'
        alt={`header ${altWord} de PVC`}
      />
      <div className='container'>
        <div className='row'>
          <div className={`${styles.data}  col-md-6`}>
            <div data-aos='fade-up' className={styles.content_data}>
              <h1>{title}</h1>
              <p>Sistemas de encastre tipo machimbre</p>
            </div>
            <div data-aos='fade-up' className={`${styles.special_obras}`}>
              <img
                className={`img-fluid ${styles.img_obras_especiales}`}
                src='./img/obras-especiales.png'
                alt={`obras especiales ${altWord} de PVC`}
              />
            </div>
          </div>
          <div className={`${styles.content_form}  col-md-6`}>
            <Formulario formLocationOrigen={formLocation} eventOrigen={event} />
          </div>
        </div>
      </div>
    </section>
  )
}

export default FirstContent
