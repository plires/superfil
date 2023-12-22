import { useEffect, useState, useContext } from 'react'
import { StoreContext } from '../context/store'
import styles from './footer.module.css'

const Footer = () => {
  const [year, setYear] = useState(null)

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

  useEffect(() => {
    const d = new Date()
    setYear(d.getFullYear())
  }, [])

  return (
    <footer className={`${styles.footer} container-fluid`}>
      <div className='container'>
        <div className={`${styles.first_row} row`}>
          <div className={`${styles.data} col-md-12`}>
            <article className={`${styles.data}`}>
              <img
                className={`img-fluid transition ${styles.icon_mail}`}
                src='./img/mail.png'
                alt='mail'
              />
              <span className={`transition`} onClick={() => scrollToTop(msg)}>
                info.@superfil.com.ar
              </span>
            </article>
            <p className={styles.copy}>
              Copyright &copy; {year}, All Rights Reserved.
            </p>
          </div>
        </div>
        <div className='row'>
          <div className={`${styles.libre} col-md-12`}>
            <p>by Libre Comunicación</p>
          </div>
        </div>
      </div>
    </footer>
  )
}

export default Footer
