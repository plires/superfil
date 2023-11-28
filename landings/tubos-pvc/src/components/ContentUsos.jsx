import Subtitulo from './Subtitulo'
import CardUso from './CardUso'
import styles from './content-usos.module.css'

const ContentUsos = () => {
  return (
    <section className={`container ${styles.usos}`}>
      <div className='row'>
        <div className='col-md-12'>
          <Subtitulo data-aos='fade-up' text='Principales usos' />
          <div className={styles.content}>
            <CardUso
              imgName='tilde.png'
              text='Tubos de PVC para Redes de distribución sanitarias y escuelas'
              AltImg='tilde redes sanitarias y escuelas'
            />
            <CardUso
              imgName='tilde.png'
              text='Tubos de PVC para cámaras de inspección'
              AltImg='tilde cámaras de inspección'
            />
            <CardUso
              imgName='tilde.png'
              text='Tubos de PVC para alcantarillado'
              AltImg='tilde alcantarillado'
            />
            <CardUso
              imgName='tilde.png'
              text='Tubos de PVC para desagües pluviales'
              AltImg='tilde desagües pluviales'
            />
            <CardUso
              imgName='tilde.png'
              text='Tubos de PVC para drenaje agrícola sub-superficial'
              AltImg='tilde drenaje agrícola sub-superficial'
            />
            <CardUso
              imgName='tilde.png'
              text='Tubos de PVC para entubamiento de canales superficiales'
              AltImg='tilde entubamiento de canales superficiales'
            />
          </div>
        </div>
      </div>

      <div className='row'>
        <div className={`col-md-8 offset-md-2 ${styles.frase}`}>
          <p>
            Estos <span>tubos de PVC</span> permiten una ágil instalación,
            economía de mano de obra y una alta resistencia a la abrasión.
          </p>
        </div>
      </div>
    </section>
  )
}

export default ContentUsos
