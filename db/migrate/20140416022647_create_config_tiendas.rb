class CreateConfigTiendas < ActiveRecord::Migration
  def self.up
    create_table :config_tiendas do |t|

      t.timestamps
    end
  end

  def self.down
    drop_table :config_tiendas
  end
end
