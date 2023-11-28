export const getCurrentMonth = () => {
  const date = new Date()
  const month = date.toLocaleString('es-AR', { month: 'long' })
  return month
}
