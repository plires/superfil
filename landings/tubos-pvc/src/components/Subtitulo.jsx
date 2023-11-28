import styles from './subtitulo.module.css'

const Subtitulo = ({ text }) => {
  return (
    <div className={styles.subtitulo}>
      <h2>{text}</h2>
    </div>
  )
}

export default Subtitulo
