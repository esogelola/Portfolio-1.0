<?php

namespace App\Models;

use CodeIgniter\Model;
use Myth\Auth\Entities\User;

class ProjectModel extends Model
{
        protected $table = 'projects';

    protected $allowedFields = ['project_name', 'project_subtitle ', 'slug' , 'project_type', 'github_link','github_zip_link', 'github_tarball_link', 'webapp_link','project_status','creation','modified'];

    public function getProjects($slug = false, $limit = NULL)
    {

            if ($slug === false) {
                    if ($limit != NULL)
                            return $this->findAll($limit);
                    else
                        return $this->findAll();

            } else if (is_numeric($slug)) {

                    return $this->asArray()
                            ->where(['id' => $slug])
                            ->first();
            } else {
                    return $this->asArray()
                            ->where(['project_name' => $slug])
                            ->first();
            }
    }

        public function removeProject($slug)
        {


                return $this->delete(['id'], $slug);
        }
        public function saveFiles($project_name)
        {
                $files =  \Config\Services::request()->getFiles();
                $folder = 'static/projects/' . $project_name;
                file_exists($folder) ||  mkdir($folder);
                $count = 0;
                if ($imagefile = $files) {
                        foreach ($imagefile['project_images'] as $img) {
                                if ($img->isValid() && !$img->hasMoved())
                                {
                                        $img->move($folder, $count . '_' . $project_name . '.' . explode('.', $img->getName())[1]);
                                }
                                $count++;
                        }
                        if ($imagefile['project_executable'] != "")
                                $imagefile['project_executable']->move($folder, $project_name . '.' . explode('.', $imagefile['project_executable']->getName())[count(explode('.', $imagefile['project_executable']->getName())) - 1]);
                        $imagefile['project_description']->move($folder, $project_name . '.' . explode('.', $imagefile['project_description']->getName())[count(explode('.', $imagefile['project_description']->getName())) - 1]);
                }
                return true;
        }

        public function updateItem($data){
         
              $this->set($data);
              $this->where('id',$data['id']);
              $this->update();
               

        }
        public function editFiles($project_name, $old_name)
        {
                $files =  \Config\Services::request()->getFiles();
                rename('static/projects/' .$old_name, 'static/projects/' . $project_name);
                $folder = 'static/projects/' . $project_name;
                $dir = scandir($folder);
                if ($files['project_description'] != "") {
                        file_exists($folder . '/'. $project_name . '.txt') ?  unlink($folder . '/'. $project_name . '.txt') : '';
                        $files['project_description']->move($folder, $project_name . '.' . explode('.', $files['project_description']->getName())[count(explode('.', $files['project_description']->getName())) - 1]);
                }
                if ($files['project_executable'] != "") {
                        $ext = '';
                        foreach ($dir as $file) {
                                foreach (SUPPORT_EXECUTABLES as $executes) {
                                        $arr = explode('.', $file);
                                        if ($arr[count($arr) -1]  == $executes) {
                                                $ext = '.' . $executes;
                                        }
                                }
                        }
                        file_exists($folder . '/'. $project_name . $ext) ? unlink($folder . '/' . $project_name . $ext) : '';
                        $files['project_executable']->move($folder, $project_name . '.' . explode('.', $files['project_executable']->getName())[count(explode('.', $files['project_executable']->getName())) - 1]);
                }
                return true;
        }
        public function getDescription($project_name)
        {
                $folder = 'static/projects/' . $project_name;
                $file = $folder . '/' . $project_name . '.txt';
                return file_get_contents($file);
        }
        public function saveDescription($project_name, $description)
        {
                $folder = 'static/projects/' . $project_name;
                $file = $folder . '/' . $project_name . '.txt';
                file_put_contents($file, $description);
        }
        public function getImages($project_name)
        {

                $folder = 'static/projects/' . $project_name;
                $dir = scandir($folder);
                $imageArr = array();
                foreach ($dir as $file) {
                        $ext = explode('.', $file)[count(explode('.', $file)) - 1];

                        if ($file != '.' && $file != '..' && $this->is_image(base_url($folder . '/' . $file))) {

                                $imageArr[] = [
                                        'image_id' => explode('_', $file)[0],
                                        'image_name' => explode('.', substr($file, 2))[0],
                                        'image_path' => base_url($folder . '/' . $file),
                                        'real_path' => $folder . '/' . $file,
                                        'image_date' =>  date("F d Y H:i:s.", filemtime($folder . '/' . $file)),
                                        'image_type' => explode('.', substr($file, 2))[1],

                                ];
                        }
                }

                return $imageArr;
        }
        public function saveImages($imageArr, $project_name)
        {
                $files =  \Config\Services::request()->getFiles();
                $folder = 'static/projects/' . $project_name;

                file_exists($folder) ||  mkdir($folder);
                $count = count($imageArr);
                $imagefile = $files;
                foreach ($imagefile['addImages'] as $img) {
                        if ($img->isValid() && !$img->hasMoved()) {

                                $img->move($folder, $count . '_' . $project_name . '.' . explode('.', $img->getName())[1]);
                        }
                        $count++;
                }
        }
        public function deleteImage($id, $name)
        {
                $folder = 'static/projects/' .  $name;
                $dir = scandir($folder);
                $images = $this->getImages($name);
                foreach ($images as $file) {
                        if ($id == $file['image_id']) {
                                unlink($file['real_path']);
                        }
                }
                $images = $this->getImages($name);
                $count = 0;
                foreach ($images as $file) {
                        rename($file['real_path'], $folder . '/' .  $count . '_' .  $file['image_name'] . '.' . $file['image_type']);
                        $count++;
                }
        }
        private function get_executable($folder)
        {
                $dir = scandir($folder);
                $execute = array();
                foreach ($dir as $file) {
                        foreach (SUPPORT_EXECUTABLES as $executes) {
                                $arr = explode('.', $file);
                                if ($arr[count($arr) - 1]  == $executes) {
                                        $execute = [
                                                'file_name' => explode('.', $file),
                                                'file_ext' => $executes,
                                                'file_path' => base_url($folder . '/' . $file),
                                                'real_path' => $folder . '/' . $file,

                                        ];
                                        return $execute;
                                }
                        }
                }
                return false;
        }
        private function isSvg($path)
        {
                return 'image/svg+xml' === mime_content_type($path);
        }

        private function is_image($path)
        {
                if (@is_array(getimagesize($path))) {
                        return true;
                }
                return false;
        }
        public  function deleteDir($dirPath)
        {

                if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
                        $dirPath .= '/';
                }
                $files = glob($dirPath . '*', GLOB_MARK);
                foreach ($files as $file) {
                        if (is_dir($file)) {
                                self::deleteDir($file);
                        } else {
                                unlink($file);
                        }
                }
                rmdir($dirPath);
        }
}