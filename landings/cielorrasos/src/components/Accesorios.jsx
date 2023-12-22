import Icon from './Icon'
import styles from './accesorios.module.css'

const Accesorios = () => {
  return (
    <section data-aos='fade-up' className={`container ${styles.accesorios}`}>
      <div className={`row ${styles.content_icons}`}>
        <div className='col-4'>
          <Icon
            image='cubrezocalo.png'
            title='Cubrezócalo <br />"U" perimetral'
          />
        </div>
        <div className='col-4'>
          <Icon image='perfil.png' title='Perfil unión "H"' />
        </div>
        <div className='col-4'>
          <Icon image='canto.png' title='Canto <br />redondeado' />
        </div>
      </div>
    </section>
  )
}

export default Accesorios
