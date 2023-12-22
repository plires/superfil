import styles from './icon.module.css'

const Icon = ({ image, title }) => {
  return (
    <div className={`icon ${styles.atributo_icon}`}>
      <img
        className='img-fluid'
        src={`./img/${image}`}
        alt={`icono de ${title}`}
      />
      <h3
        dangerouslySetInnerHTML={{
          __html: title,
        }}
      ></h3>
    </div>
  )
}

export default Icon
