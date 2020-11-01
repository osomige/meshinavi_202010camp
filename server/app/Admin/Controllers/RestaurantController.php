<?php

namespace App\Admin\Controllers;

use App\Restaurant;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RestaurantController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Restaurant';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Restaurant());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('name_kana', __('Name kana'));
        $grid->column('address', __('Address'));
        $grid->column('opentime', __('Opentime'));
        $grid->column('holiday', __('Holiday'));
        $grid->column('category_id', __('Category id'));
        $grid->column('note', __('Note'));
        $grid->column('pr_short', __('Pr short'));
        $grid->column('pr_long', __('Pr long'));
        $grid->column('img_path', __('Img path'));
        $grid->column('recommend', __('Recommend'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Restaurant::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('name_kana', __('Name kana'));
        $show->field('address', __('Address'));
        $show->field('opentime', __('Opentime'));
        $show->field('holiday', __('Holiday'));
        $show->field('category_id', __('Category id'));
        $show->field('note', __('Note'));
        $show->field('pr_short', __('Pr short'));
        $show->field('pr_long', __('Pr long'));
        $show->field('img_path', __('Img path'));
        $show->field('recommend', __('Recommend'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Restaurant());

        $form->text('name', __('Name'));
        $form->text('name_kana', __('Name kana'));
        $form->text('address', __('Address'));
        $form->text('opentime', __('Opentime'));
        $form->text('holiday', __('Holiday'));
        $form->number('category_id', __('Category id'))->default(1);
        $form->text('note', __('Note'));
        $form->text('pr_short', __('Pr short'));
        $form->text('pr_long', __('Pr long'));
        $form->text('img_path', __('Img path'));
        $form->number('recommend', __('Recommend'));

        return $form;
    }
}
