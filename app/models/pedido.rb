class Pedido < ActiveRecord::Base
  attr_accesor :fecha
  attr_accesor :calle
  attr_accesor :colonia
  attr_accesor :codigo_postal
  attr_accesor :num_exterior
  attr_accesor :num_interior
  attr_accesor :referencias_ubicacion
  attr_accesor :latitud
  attr_accesor :longitud
  attr_accesor :correo
  attr_accesor :telefono
end
