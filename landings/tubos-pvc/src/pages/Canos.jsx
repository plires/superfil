import FirstContent from './../components/FirstContent'
import ContentCaracteristicas from './../components/ContentCaracteristicas'
import ContentSlide from './../components/ContentSlide'
import Diametros from './../components/Diametros'
import ContentPresupuesto from './../components/ContentPresupuesto'
import ContentUsos from './../components/ContentUsos'
import LastContent from './../components/LastContent'

const Canos = () => {
  return (
    <>
      <FirstContent
        title='LÍNEA CAÑOS DE PVC'
        formLocation='form_canos_pvc'
        event='send_form_canos_pvc'
        altWord='caños'
      />
      <ContentCaracteristicas
        title='Características principales de los caños de PVC'
        word='caño'
        pluralWord='caños'
      />
      <ContentSlide pluralWord='caños' />
      <Diametros />
      <ContentPresupuesto />
      <ContentUsos pluralWord='Caños' />
      <LastContent />
    </>
  )
}

export default Canos
