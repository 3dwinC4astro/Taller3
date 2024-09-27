<?php
use Illuminate\Support\Facades\DB;

public function checkDatabaseConnection()
{
    try {
        // Intenta ejecutar una consulta simple para comprobar la conexión
        DB::connection()->getPdo();
        return response()->json(['status' => 'success', 'message' => 'Conexión a la base de datos exitosa.']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'message' => 'No se pudo conectar a la base de datos: ' . $e->getMessage()]);
    }
}
