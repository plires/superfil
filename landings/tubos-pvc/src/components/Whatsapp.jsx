import { useEffect, useState } from 'react'
import axios from 'axios'
import styles from './whatsapp.module.css'

const Whatsapp = () => {
  const [whatsappOpen, setWhatsappOpen] = useState(true)
  const [whatsapp, setWhatsapp] = useState([])

  const setNextWhatsappNumberByRubro = async currentRubro => {
    try {
      const values = {
        rubro: currentRubro,
      }
      await axios.post(
        import.meta.env.VITE_ROOT + '/php/process-set-next-whatsapp.php',
        values,
      )
    } catch (error) {
      console.log(error.message)
    }
  }

  const handleWhatsapp = async currentRubro => {
    try {
      const values = {
        rubro: currentRubro,
      }
      const response = await axios.post(
        import.meta.env.VITE_ROOT + '/php/process-whatsapp.php',
        values,
      )

      if (response.data.success) {
        setWhatsapp(response.data.data)
      } else {
        setWhatsappOpen(false)
      }
    } catch (error) {
      setWhatsappOpen(false)
    }
  }

  useEffect(() => {
    handleWhatsapp(import.meta.env.VITE_RUBRO)
  }, [])

  if (whatsappOpen) {
    return (
      <>
        <section id='seguidor' className={`text-center ${styles.seguidor}`}>
          <button
            id='cerrar-seguidor'
            className={styles.cerrar_seguidor}
            style={{ color: '#000000' }}
          >
            <img
              className='transition'
              width='20'
              height='20'
              src='./img/close.png'
              alt='close'
              onClick={() => setWhatsappOpen(false)}
            />
          </button>

          <hr style={{ margin: '10px 0' }} />

          <div className={styles.click_to_call_mobile}>
            <img src='./img/whatsapp.png' alt='whatsapp' />
          </div>

          <h6>
            <strong>¡CONSULTÁ POR WHATSAPP!</strong>
          </h6>
          <a
            id='whatsapp_desktop'
            href={whatsapp[2]}
            onClick={() =>
              setNextWhatsappNumberByRubro(import.meta.env.VITE_RUBRO)
            }
            target='_blank'
            rel='noopener noreferrer'
            className={`btn ${styles.btn_wap}`}
          >
            CHAT
          </a>
        </section>

        <section
          id='seguidor-tel'
          className={`text-center ${styles.seguidor_tel}`}
        >
          <div className='tex-right'>
            <button
              id='cerrar-seguidor-tel'
              className={styles.mobile_btn_close}
              style={{
                color: '#000000',
                backgroundColor: '#03e97e',
                border: 'none',
              }}
            >
              <img
                className={`transition ${styles.cerrar_seguidor_tel}`}
                width='20'
                height='20'
                src='./img/close.png'
                alt='close'
                onClick={() => setWhatsappOpen(false)}
              />
            </button>
          </div>

          <a
            id='whatsapp_mobile'
            className='transition'
            href={whatsapp[2]}
            onClick={() =>
              setNextWhatsappNumberByRubro(import.meta.env.VITE_RUBRO)
            }
            target='_blank'
            rel='noopener noreferrer'
          >
            ¡CONSULTÁ POR <br /> WHATSAPP!
          </a>
        </section>
      </>
    )
  } else {
    return null
  }
}
export default Whatsapp
