import styles from './card-uso.module.css'

const CardUso = ({ imgName, AltImg, text }) => {
  return (
    <article data-aos='fade-up' className={styles.card_uso}>
      <img className='img-fluid' src={`./img/${imgName}`} alt={AltImg} />
      <p>{text}</p>
    </article>
  )
}

export default CardUso
