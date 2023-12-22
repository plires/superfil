import styles from './content-encastres.module.css'

const ContentEncastres = () => {
  return (
    <section className={`container ${styles.content_encastres}`}>
      <div className='row'>
        <div className='col-md-12'>
          <div data-aos='fade-up' className={styles.content}>
            <img
              className={`img-fluid ${styles.img_producto}`}
              src='./img/cielorraso-encastre.png'
              alt={`cielorrasos de pvc detalle`}
            />
            <div className={styles.content_data}>
              <h3>Sistemas de encastre tipo machimbre</h3>
              <p>
                Es un sistema de encastre conocido como machimbre de PVC que
                mejora la terminación y agiliza sus procesos de instalación.
              </p>
              <ul>
                <li>&bull;&nbsp;Fácil Aplicación</li>
                <li>&bull;&nbsp;Rápidez de instalación</li>
                <li>&bull;&nbsp;Prolijidad en la terminación</li>
                <li>&bull;&nbsp;Mantenimiento cero</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default ContentEncastres
