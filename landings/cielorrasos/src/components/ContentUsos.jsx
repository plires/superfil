import Subtitulo from './Subtitulo'
import CardUso from './CardUso'
import styles from './content-usos.module.css'

const ContentUsos = ({ pluralWord }) => {
  return (
    <section className={`container ${styles.usos}`}>
      <div className='row'>
        <div className='col-md-12'>
          <Subtitulo text='Principales usos' />
          <div className={styles.content}>
            <CardUso
              imgName='tilde.png'
              text={`${pluralWord} de PVC <br /> para aeropuertos`}
              AltImg='tilde cielorrasos para arepouertos'
            />
            <CardUso
              imgName='tilde.png'
              text={`${pluralWord} de PVC <br /> para 
              bancos y escuelas`}
              AltImg='tilde cielorrasos para escuelas'
            />
            <CardUso
              imgName='tilde.png'
              text={`${pluralWord} de PVC <br /> para
              estaciones de servicio`}
              AltImg='tilde cielorrasos para estaciones de servicios'
            />
            <CardUso
              imgName='tilde.png'
              text={`${pluralWord} de PVC <br /> para farmacias`}
              AltImg='tilde cielorrasos para farmacias'
            />
            <CardUso
              imgName='tilde.png'
              text={`${pluralWord} de PVC <br /> para frigoríficos e ind. alimenticias`}
              AltImg='tilde cielorrasos para frigoríficos e ind. alimenticias'
            />
            <CardUso
              imgName='tilde.png'
              text={`${pluralWord} de PVC <br /> para hospitales y laboratorios`}
              AltImg='tilde cielorrasos para hospitales y laboratorios'
            />
          </div>
        </div>
      </div>

      <div data-aos='fade-up' className='row'>
        <div className={`col-md-8 offset-md-2 ${styles.frase}`}>
          <p>
            Estos <span>{pluralWord} de PVC</span> poseen una estructura interna
            que esta conformada por refuerzos y aseguran una considerable{' '}
            <span>resistencia al impacto,</span> gracias a sus cámaras de aire
            que proporcionan un interesante{' '}
            <span>aislamiento térmico y acústico.</span>
            Estos productos también son conocidos como{' '}
            <span>machimbre plástico o machimbre PVC.</span>
          </p>
        </div>
      </div>
    </section>
  )
}

export default ContentUsos
