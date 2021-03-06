<?php


namespace App\Interfaces\Admin;


use App\Http\Requests\Admin\PostCreateRequest;
use App\Http\Requests\Admin\PostUpdateRequest;

interface PostInterface
{
    /*
     *
     *@method (GET)
     */
    public function get();

    /*
     *
     *@method (GET)
     */
    public function getById($slug);

   /*
    *
    * @method (GET)
    */
    public function createView();

    /*
     *
     *@method (POST)
     */
    public function post(PostCreateRequest $request);

    /*
     *
     * @method (PUT)
     */
    public function put(PostUpdateRequest $request,$slug);

    /*
     *
     * @method (DELETE)
     */
    public function destroy($slug);


}
