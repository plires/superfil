import Subtitulo from './Subtitulo'
import IconSmall from './IconSmall'
import styles from './last-content.module.css'

const LastContent = () => {
  return (
    <section data-aos='fade-up' className={`${styles.last_content} container`}>
      <div className='row'>
        <Subtitulo text='Nuevo sistema para la instalación <br /> de cielorrasos de PVC' />
      </div>
      <div className='row'>
        <div className={`${styles.content_img} col-md-6`}>
          <img
            className={`img-fluid ${styles.icon}`}
            src='./img/soleraplast.png'
            alt='Soleraplast'
          />
        </div>
        <div className={`${styles.content_data} col-md-6`}>
          <p className={`${styles.data}`}>
            El perfil de <span>PVC Soleraplast</span> es una estructura rígida
            para la fijación y soporte del revestimiento de PVC. Esta diseñado
            para reemplazar la madera y el metal con mayor durabilidad, ligereza
            y resistencia.
          </p>
          <div className={`row ${styles.btn}`}>
            <div className='col-6'>
              <div className={`${styles.content}`}>Fácil instalación</div>
            </div>
            <div className='col-6'>
              <div className={`${styles.content}`}>Alta resistencia</div>
            </div>
            <div className='col-6'>
              <div className={`${styles.content}`}>Larga vida útil</div>
            </div>
            <div className='col-6'>
              <div className={`${styles.content}`}>Súper liviano</div>
            </div>
          </div>
          <div className={`row ${styles.icons_bottom}`}>
            <IconSmall
              src='residencial.png'
              alt='cielorraso residencial'
              text='Uso residencial'
            />
            <IconSmall
              src='comercial.png'
              alt='cielorraso comercial'
              text='Uso comercial'
            />
            <IconSmall
              src='industrial.png'
              alt='cielorraso industrial'
              text='Uso industrial'
            />
          </div>
        </div>
      </div>
    </section>
  )
}

export default LastContent
