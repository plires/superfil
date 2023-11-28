import { useEffect, useRef } from 'react'
import styles from './header.module.css'

const Header = () => {
  const headerElement = useRef()

  useEffect(() => {
    const handleScroll = () => {
      const scrollPosition = window.scrollY

      if (scrollPosition > 100) {
        headerElement.current.classList.add(styles.fixed)
      } else {
        headerElement.current.classList.remove(styles.fixed)
      }
    }

    window.addEventListener('scroll', handleScroll)

    return () => {
      window.removeEventListener('scroll', handleScroll)
    }
  }, [])

  return (
    <header className='transition' ref={headerElement}>
      <div className={`${styles.content_logo} transition`}>
        <img
          className='img-fluid'
          src='./img/logo-superfil.png'
          alt='logo superfil.com.ar'
        />
      </div>
    </header>
  )
}

export default Header
