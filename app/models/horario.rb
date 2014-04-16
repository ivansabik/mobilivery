class Horario < ActiveRecord::Base
  attr_accesor :dia
  attr_accesor :hora_apertura
  attr_accesor :hora_cierre
end
