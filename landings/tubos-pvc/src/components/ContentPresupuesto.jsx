import { useContext } from 'react'
import { StoreContext } from '../context/store'
import styles from './content-presupuesto.module.css'

const ContentPresupuesto = () => {
  const { setMessage } = useContext(StoreContext)

  const scrollToTop = msg => {
    window.scroll({
      top: 350,
      left: 0,
      behavior: 'smooth',
    })
    setMessage(msg)
  }

  const msg = 'Necesito hacer una consulta...'

  return (
    <section className={`container ${styles.presupuesto}`}>
      <div className='row'>
        <div
          data-aos='fade-up'
          className={`col-md-8 offset-md-2 ${styles.content}`}
        >
          <h3>¿Necesitas presupuesto?</h3>
          <button onClick={() => scrollToTop(msg)} className='btn'>
            CONTACTANOS
          </button>
        </div>
      </div>
    </section>
  )
}

export default ContentPresupuesto
