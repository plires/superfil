import styles from './error-input.module.css'

export default function ErrorInput({ children }) {
  return <div className={styles.error}>{children}</div>
}
