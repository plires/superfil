import styles from './loading.module.css'

export default function Loading() {
  return (
    <div className={`${styles.content_all_spiner}`}>
      <div className={`${styles.content}`}>
        <div className={`${styles.spinner}`}></div>
        <div className={`${styles.leyenda}`}>Enviando...</div>
      </div>
    </div>
  )
}
