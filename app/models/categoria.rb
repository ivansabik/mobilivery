class Categoria < ActiveRecord::Base
  attr_accesor :nombre
  attr_accesor :foto
  attr_accesor :productos
end
