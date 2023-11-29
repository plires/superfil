import Description from './Description'
import Subtitulo from './Subtitulo'
import Icon from './Icon'
import Consultar from './Consultar'

import styles from './content-caracteristicas.module.css'

const ContentCaracteristicas = ({ title, word, pluralWord }) => {
  return (
    <section className={`container ${styles.content_caracteristicas}`}>
      <div className='row'>
        <div className='col-md-12'>
          <Description word={word} pluralWord={pluralWord} />
        </div>
      </div>

      <div className='row'>
        <div className='col-md-8 offset-md-2'>
          <Subtitulo data-aos='fade-up' text={title} />

          <div data-aos='fade-up' className={`row ${styles.content_icons}`}>
            <div className='col-4'>
              <Icon image='bajo-peso.gif' title='Bajo peso' />
            </div>
            <div className='col-4'>
              <Icon image='bajo-costo.gif' title='Bajo costo' />
            </div>
            <div className='col-4'>
              <Icon image='alta-resistencia.gif' title='Alta resistencia' />
            </div>
          </div>

          <Consultar />
        </div>
      </div>
    </section>
  )
}

export default ContentCaracteristicas
