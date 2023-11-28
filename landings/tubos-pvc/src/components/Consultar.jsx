import { useContext } from 'react'
import { StoreContext } from '../context/store'
import styles from './consultar.module.css'

const Consultar = () => {
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
    <section data-aos='fade-up' className={styles.consultar}>
      <p>
        Consultá precios de tuberías perfiladas para grandes obras. Realizamos
        presupuestos <span>SIN CARGO</span>.
      </p>
      <button onClick={() => scrollToTop(msg)} className='btn'>
        CONSULTAR
      </button>
    </section>
  )
}

export default Consultar
