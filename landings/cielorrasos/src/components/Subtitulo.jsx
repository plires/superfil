import styles from './subtitulo.module.css'

const Subtitulo = ({ text }) => {
  return (
    <div data-aos='fade-up' className={styles.subtitulo}>
      <h2
        dangerouslySetInnerHTML={{
          __html: text,
        }}
      ></h2>
    </div>
  )
}

export default Subtitulo
