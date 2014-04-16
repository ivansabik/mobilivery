class CreateComercios < ActiveRecord::Migration
  def self.up
    create_table :comercios do |t|

      t.timestamps
    end
  end

  def self.down
    drop_table :comercios
  end
end
