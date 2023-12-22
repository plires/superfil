import styles from './icon-small.module.css'

const IconSmall = ({ src, alt, text }) => {
  return (
    <div className={`${styles.content_icons}`}>
      <img
        className={`img-fluid`}
        src={`./img/${src}`}
        alt={`icono de ${alt}`}
      />
      <p>{text}</p>
    </div>
  )
}
export default IconSmall
