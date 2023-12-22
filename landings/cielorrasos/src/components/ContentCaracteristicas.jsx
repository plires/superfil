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
              <Icon
                image='no-conductivo.gif'
                title='No transmiten electricidad'
              />
            </div>
            <div className='col-4'>
              <Icon image='impermeables.gif' title='Son <br />impermeables' />
            </div>
            <div className='col-4'>
              <Icon image='acusticos.gif' title='Aislantes <br />acústicos' />
            </div>
          </div>

          <Consultar />
        </div>
      </div>
    </section>
  )
}

export default ContentCaracteristicas
