import styles from './diametros.module.css'

const Diametros = () => {
  return (
    <section data-aos='fade-up' className={`container ${styles.diametros}`}>
      <div className='col-md-12'>
        <picture>
          <source
            className='img-fluid'
            srcSet='./img/tubos-diametro.jpg'
            media='(min-width: 576px)'
          />
          <img
            className='img-fluid'
            src='./img/tubos-diametro-mobile.jpg'
            alt='tubos y caños de PVC - diametro'
          />
        </picture>
      </div>
    </section>
  )
}

export default Diametros
