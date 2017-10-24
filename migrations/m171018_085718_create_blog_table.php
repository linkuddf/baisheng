<?php

use yii\db\Migration;

/**
 * Handles the creation of table `blog`.
 */
class m171018_085718_create_blog_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('blog', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->notNull()->defaultValue(''),
            'content' => $this->text(),
            'create_time' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('blog');
    }
}
