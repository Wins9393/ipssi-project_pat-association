<?php

namespace App\Controller;

class DefaultController{

    public function render(string $path, array $param = [])
    {
        ob_start();
        extract($param);
        require ROOT."/App/Views/$path.php";
        $content = ob_get_clean();
        require ROOT."/App/Views/default.php";
    }

    public function home()
    {
        $this->render("home");
    }

    public function redirectToRoute(string $path)
    {
        header("Location:index.php?page=$path");
    }

    public function getAll(string $path, $arrayEntity){
        $model = $this->manager->getList();
        $this->render($path, [$arrayEntity => $model]);
    }

    public function getLast10(string $path, $arrayEntity)
    {
        $model = $this->manager->getList();
        array_splice($model, -0, (sizeof($model) - 10));
        $this->render($path, [$arrayEntity => $model]);

    }

    public function getEntityById(string $path, $id, $entity){
        $model = $this->manager->getOne($id);

        //$this->render($path, [$entity => $model[0]]);
        $this->render($path, [$entity => reset($model)]);
    }

}