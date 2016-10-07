<?php

use yii\db\Migration;

/**
 * Handles the creation for table `posts`.
 */
class m160925_141850_create_posts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'autor'=>$this->string(),
            'data_add'=>$this->date(),
            'data_update'=>$this->date(),
            'title'=>$this->text(),
            'opus'=>$this->text(),
            'img'=>$this->string(),
            'full_text'=>$this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('posts');
    }
}
