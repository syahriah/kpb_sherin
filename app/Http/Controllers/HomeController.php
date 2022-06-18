<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Mahasiswa;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $response = Http::post(env("API_URL") . "/identity/verify", [
            "username" => $request->username,
            "password" => $request->password
        ]);

        if ($response["authenticated"]) {
            $request->session()->put("user", $request->all());
            return redirect("/");
        } else {
            return redirect()->back()->with("pesan", "Username or Password is incorrect");
        }
    }
    public function logout()
    {
        session()->forget("user");
        return redirect("/login");
    }

    public function startInstance(Request $request)
    {
        $startInstance =  Http::post(env("API_URL") . "/process-definition/" . env("PROCESS_DEFINITION_ID") . "/start", [
            "businessKey" => "",
        ])->json();

        $task = Http::post(env("API_URL") . "/task", [
            "processInstanceId" => $startInstance["id"],
        ])->json();

        Http::post(env("API_URL") . "/task/" . $task[0]["id"] . "/submit-form", [
            "variables" => [
                "nama" => [
                    "value" => $request->nama,
                    "type" => "String"
                ],
                "nim" => [
                    "value" => $request->nim,
                    "type" => "String"
                ],
                "ipk" => [
                    "value" => $request->ipk,
                    "type" => "String"
                ],
                "doswal" => [
                    "value" => $request->doswal,
                    "type" => "String"
                ],
                "batas_sks" => [
                    "value" => $request->batas_sks,
                    "type" => "String"
                ],
                "jumlah_sks" => [
                    "value" => $request->jumlah_sks,
                    "type" => "String"
                ],
                "matkul" => [
                    "value" => $request->matkul,
                    "type" => "String"
                ],
            ]
        ])->json();

        return back()->with("pesan", "Data berhasil dikirim");
    }
    public function updateData(Request $request)
    {
        Http::post(env("API_URL") . "/task/" . $request->taskId . "/submit-form", [
            "variables" => [
                "nama" => [
                    "value" => $request->nama,
                    "type" => "String"
                ],
                "nim" => [
                    "value" => $request->nim,
                    "type" => "String"
                ],
                "ipk" => [
                    "value" => $request->ipk,
                    "type" => "String"
                ],
                "doswal" => [
                    "value" => $request->doswal,
                    "type" => "String"
                ],
                "batas_sks" => [
                    "value" => $request->batas_sks,
                    "type" => "String"
                ],
                "jumlah_sks" => [
                    "value" => $request->jumlah_sks,
                    "type" => "String"
                ],
                "matkul" => [
                    "value" => $request->matkul,
                    "type" => "String"
                ],
            ]
        ])->json();
        return redirect("/admin")->with("pesan", "Data berhasil diupdate");
    }

    public function admin()
    {
        $listInstance = Http::post(env("API_URL") . "/process-instance", [
            "processDefinitionId" => env("PROCESS_DEFINITION_ID"),
        ])->json();

        $variables = [];
        $i = 0;
        foreach ($listInstance as $instance) {
            $nama = Http::post(env("API_URL") . "/variable-instance", [
                "processInstanceIdIn" => [$instance["id"]],
                "variableName" => "nama",
            ])->json();
            $nim = Http::post(env("API_URL") . "/variable-instance", [
                "processInstanceIdIn" => [$instance["id"]],
                "variableName" => "nim",
            ])->json();
            $ipk = Http::post(env("API_URL") . "/variable-instance", [
                "processInstanceIdIn" => [$instance["id"]],
                "variableName" => "ipk",
            ])->json();
            $doswal = Http::post(env("API_URL") . "/variable-instance", [
                "processInstanceIdIn" => [$instance["id"]],
                "variableName" => "doswal",
            ])->json();
            $batas_sks = Http::post(env("API_URL") . "/variable-instance", [
                "processInstanceIdIn" => [$instance["id"]],
                "variableName" => "batas_sks",
            ])->json();
            $jumlah_sks = Http::post(env("API_URL") . "/variable-instance", [
                "processInstanceIdIn" => [$instance["id"]],
                "variableName" => "jumlah_sks",
            ])->json();
            $matkul = Http::post(env("API_URL") . "/variable-instance", [
                "processInstanceIdIn" => [$instance["id"]],
                "variableName" => "matkul",
            ])->json();
            $variables[$i]["instanceId"] = $instance["id"];
            $variables[$i]["nama"] = $nama[0]["value"];
            $variables[$i]["nim"] = $nim[0]["value"];
            $variables[$i]["ipk"] = $ipk[0]["value"];
            $variables[$i]["doswal"] = $doswal[0]["value"];
            $variables[$i]["batas_sks"] = $batas_sks[0]["value"];
            $variables[$i]["jumlah_sks"] = $jumlah_sks[0]["value"];
            $variables[$i]["matkul"] = $matkul[0]["value"];
            $i++;
        }

        return view('admin', compact('variables'));
    }

    public function detailInstance($instanceId)
    {
        $task = Http::post(env("API_URL") . "/task", [
            "processInstanceId" => $instanceId,
        ])->json();

        $nama = Http::post(env("API_URL") . "/variable-instance", [
            "processInstanceIdIn" => [$instanceId],
            "variableName" => "nama",
        ])->json();
        $nim = Http::post(env("API_URL") . "/variable-instance", [
            "processInstanceIdIn" => [$instanceId],
            "variableName" => "nim",
        ])->json();
        $ipk = Http::post(env("API_URL") . "/variable-instance", [
            "processInstanceIdIn" => [$instanceId],
            "variableName" => "ipk",
        ])->json();
        $doswal = Http::post(env("API_URL") . "/variable-instance", [
            "processInstanceIdIn" => [$instanceId],
            "variableName" => "doswal",
        ])->json();
        $batas_sks = Http::post(env("API_URL") . "/variable-instance", [
            "processInstanceIdIn" => [$instanceId],
            "variableName" => "batas_sks",
        ])->json();
        $jumlah_sks = Http::post(env("API_URL") . "/variable-instance", [
            "processInstanceIdIn" => [$instanceId],
            "variableName" => "jumlah_sks",
        ])->json();
        $matkul = Http::post(env("API_URL") . "/variable-instance", [
            "processInstanceIdIn" => [$instanceId],
            "variableName" => "matkul",
        ])->json();

        $variables = [
            "nama" => $nama[0]["value"],
            "nim" => $nim[0]["value"],
            "ipk" => $ipk[0]["value"],
            "doswal" => $doswal[0]["value"],
            "batas_sks" => $batas_sks[0]["value"],
            "jumlah_sks" => $jumlah_sks[0]["value"],
            "matkul" => $matkul[0]["value"],
        ];

        if ($task[0]["name"] == "Menginput data FRS") {
            return view('home', compact('variables', 'task'));
        }

        return view('detail', compact('variables', 'task'));
    }

    public function setujui(Request $request)
    {
        Http::post(env("API_URL") . "/task/" . $request->taskId . "/submit-form", [
            "variables" => [
                "disetujui" => [
                    "value" => $request->disetujui,
                    "type" => "String"
                ],
            ]
        ])->json();

        return redirect("/admin")->with("pesan", "Data berhasil divalidasi");
    }

    public function validasi(Request $request)
    {
        Http::post(env("API_URL") . "/task/" . $request->taskId . "/submit-form", [
            "variables" => [
                "validasi" => [
                    "value" => "iya",
                    "type" => "String"
                ],
            ]
        ])->json();
        return redirect("/admin")->with("pesan", "Data berhasil divalidasi");
    }
}
