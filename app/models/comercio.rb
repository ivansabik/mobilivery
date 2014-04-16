class Comercio < ActiveRecord::Base
  attr_accesor :nombre
  attr_accesor :logo
  attr_accesor :foto_local
  attr_accesor :latitud
  attr_accesor :longitud
  attr_accesor :horarios
  attr_accesor :descripcion
  attr_accesor :radio_entrega
end
