import styles from './description.module.css'

const Description = ({ word, pluralWord }) => {
  return (
    <div data-aos='fade-up' className={styles.content_data}>
      <p>
        El {word} Superfil, es un sistema de perfiles de encastre tipo machimbre
        obtenidos a partir de las más altas tecnologías en la extrusión de
        compuestos de PVC.
      </p>
      <img
        className={`img-fluid ${styles.img_producto}`}
        src='./img/vista-cielorraso.png'
        alt={`${pluralWord} de pvc detalle`}
      />
    </div>
  )
}

export default Description
