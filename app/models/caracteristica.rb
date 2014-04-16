class Caracteristica < ActiveRecord::Base
  attr_accesor :nombre
  attr_accesor :opciones_seleccion
  attr_accesor :opcion_unica?
  attr_accesor :precio
end
