import styles from './last-content.module.css'

const LastContent = () => {
  return (
    <div className={`${styles.last_content} container-fluid`}>
      <div className='container'>
        <div className='row'>
          <div data-aos='fade-up' className='col-md-12'>
            <img
              className={`img-fluid ${styles.icon}`}
              src='./img/maquina.png'
              alt='maquina obras tubos y caños de PVC'
            />
            <p>
              Desarrollados para grandes <br />
              obras de infraestructura
            </p>
          </div>
        </div>
      </div>
    </div>
  )
}

export default LastContent
