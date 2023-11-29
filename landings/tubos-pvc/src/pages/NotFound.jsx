import { NavLink } from 'react-router-dom'
import styles from './not-found.module.css'

const NotFound = () => {
  return (
    <section className={`${styles.not_found}`}>
      <h1>404</h1>
      <h3>Recurso no encontrado</h3>
      <NavLink to='/'>
        <button className='btn'>Volver</button>
      </NavLink>
    </section>
  )
}

export default NotFound
