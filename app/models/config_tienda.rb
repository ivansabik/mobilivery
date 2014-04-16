class ConfigTienda < ActiveRecord::Base
  attr_accesor :estilo_header
  attr_accesor :estilo_contenido
  attr_accesor :estilo_footer
  attr_accesor :imagen_fondo
  attr_accesor :respetar_apertura?
  attr_accesor :respetar_zona?
  attr_accesor :aceptar_recoger?
end
