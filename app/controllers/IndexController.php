<?php

class IndexController extends ControllerBase
{

    public function indexAction(){
        $produk = Produk::find();
        $this->view->produk = $produk;
    }
    public function editAction($params){
        $produk = Produk::findFirst($params);
        $this->view->produk = $produk;
        $this->view->action = 'update/'.$params;
    }
    public function updateAction($id){
        $produk = Produk::findFirst($id);

        // Store and check for errors
        $success = $produk->update(
            $this->request->getPost(),
            [
                "nama",
                "deskripsi",
            ]
        );

        if ($success) {
            return $this->response->redirect("/");
        } else {

            $messages = $produk->getMessages();

            foreach ($messages as $message) {
                $this->flash2->message('',$message);
            }
            return $this->response->redirect("edit/$id");
        }

        $this->view->disable();
    }
    public function createAction(){
        $this->view->action = 'post';
    }
    public function postAction(){
        $produk = new Produk();

        // Store and check for errors
        $success = $produk->save(
            $this->request->getPost(),
            [
                "nama",
                "deskripsi",
            ]
        );

        if ($success) {
            return $this->response->redirect("/");
        } else {

            $messages = $produk->getMessages();

            foreach ($messages as $message) {
                $this->flash2->message('',$message);
            }
            return $this->response->redirect("create");
        }

        $this->view->disable();
    }

    public function deleteAction($params){
        $produk = Produk::findFirst($params);

        if ($produk !== false) {
            if ($produk->delete() === false) {

                $messages = $produk->getMessages();


                foreach ($messages as $message) {
                    $this->flash2->message('',$message);
                }
                return $this->response->redirect("/");
            } else {
                return $this->response->redirect("/");
            }
        }
    }

}

