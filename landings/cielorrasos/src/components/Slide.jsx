import styles from './slide.module.css'

const Slide = () => {
  return (
    <section
      id='carouselTubosSlidesOnly'
      className={`carousel slide carousel-fade ${styles.slide_tubos}`}
      data-bs-ride='carousel'
    >
      <div className='carousel-inner'>
        <div className='carousel-item active'>
          <img
            src='./img/cielorrasos-slide-a.jpg'
            className='d-block w-100'
            alt='slide tubos y caños de PVC a'
          />
        </div>
        <div className='carousel-item'>
          <img
            src='./img/cielorrasos-slide-b.jpg'
            className='d-block w-100'
            alt='slide tubos y caños de PVC b'
          />
        </div>
        <div className='carousel-item'>
          <img
            src='./img/cielorrasos-slide-c.jpg'
            className='d-block w-100'
            alt='slide tubos y caños de PVC c'
          />
        </div>
      </div>
    </section>
  )
}

export default Slide
