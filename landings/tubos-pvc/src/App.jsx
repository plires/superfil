import { Routes, Route } from 'react-router-dom'
import Tubos from './pages/Tubos'
import Canos from './pages/Canos'
import NotFound from './pages/NotFound'
import Whatsapp from './components/Whatsapp'
import Header from './components/Header'
import Footer from './components/Footer'

function App() {
  return (
    <main>
      <Whatsapp />
      <Header />

      <Routes>
        <Route path='/' element={<Tubos />} />
        <Route path='/canos-pvc' element={<Canos />} />
        <Route path='*' element={<NotFound />} />
      </Routes>

      <Footer />
    </main>
  )
}

export default App
