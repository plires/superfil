import FirstContent from '../components/FirstContent'
import ContentCaracteristicas from '../components/ContentCaracteristicas'
import ContentSlide from '../components/ContentSlide'
import Accesorios from '../components/Accesorios'
import ContentPresupuesto from '../components/ContentPresupuesto'
import ContentUsos from '../components/ContentUsos'
import ContentEncastres from '../components/ContentEncastres'
import LastContent from '../components/LastContent'

const Cielorrasos = () => {
  return (
    <>
      <FirstContent
        title='LÍNEA CIELORRASOS DE PVC'
        formLocation='form_cielorrasos_pvc'
        event='send_form_cielorrasos_pvc'
        altWord='cielorrasos'
      />
      <ContentCaracteristicas
        title='Características principales de los cielorrasos'
        word='cielorraso'
        pluralWord='cielorrasos'
      />
      <ContentSlide word='cielorraso' />
      <Accesorios />
      <ContentPresupuesto />
      <ContentUsos pluralWord='Cielorrasos' />
      <ContentEncastres
        title='Características principales de los cielorrasos'
        word='cielorraso'
        pluralWord='cielorrasos'
      />
      <LastContent />
    </>
  )
}

export default Cielorrasos
