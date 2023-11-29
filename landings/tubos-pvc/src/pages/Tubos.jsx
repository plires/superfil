import FirstContent from './../components/FirstContent'
import ContentCaracteristicas from './../components/ContentCaracteristicas'
import ContentSlide from './../components/ContentSlide'
import Diametros from './../components/Diametros'
import ContentPresupuesto from './../components/ContentPresupuesto'
import ContentUsos from './../components/ContentUsos'
import LastContent from './../components/LastContent'

const Tubos = () => {
  return (
    <>
      <FirstContent
        title='LÍNEA TUBERÍAS DE PVC'
        formLocation='form_tubos_pvc'
        event='send_form_tubos_pvc'
        altWord='tubos'
      />
      <ContentCaracteristicas
        title='Características principales de los tubos de PVC'
        word='tubo'
        pluralWord='tubos'
      />
      <ContentSlide pluralWord='tubos' />
      <Diametros />
      <ContentPresupuesto />
      <ContentUsos pluralWord='Tubos' />
      <LastContent />
    </>
  )
}

export default Tubos
