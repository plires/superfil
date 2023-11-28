import styles from './icon.module.css'

const Icon = ({ image, title }) => {
  return (
    <div className={styles.atributo_icon}>
      <img
        className='img-fluid'
        src={`./img/${image}`}
        alt={`icono de ./img/${title}`}
      />
      <h3>{title}</h3>
    </div>
  )
}

export default Icon
