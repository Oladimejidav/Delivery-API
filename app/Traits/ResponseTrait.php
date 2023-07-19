<?php

namespace App\Traits;

trait ResponseTrait
{
    /**
     * Return a success JSON response.
     *
     * @param array $data The data to be included in the response.
     * @param int $statusCode The HTTP status code for the response. Default is 200.
     * @return \Illuminate\Http\JsonResponse
     */
    public function success($data = [], $statusCode = 200)
    {
        // Validate the HTTP status code
        if (!is_int($statusCode) || $statusCode < 100 || $statusCode >= 600) {
            throw new \InvalidArgumentException('Invalid HTTP status code.');
        }

        // Build the response structure
        $response = [
            'status' => 'success',
            'data' => $data,
        ];

        // Return the JSON response with the specified status code
        return response()->json($response, $statusCode);
    }
    
    /**
     * Return an error JSON response.
     *
     * @param string|array $message The error message or an array of error messages.
     * @param int $statusCode The HTTP status code for the response. Default is 400.
     * @return \Illuminate\Http\JsonResponse
     */
    public function error($message, $statusCode = 400)
    {
        // Validate the HTTP status code
        if (!is_int($statusCode) || $statusCode < 100 || $statusCode >= 600) {
            throw new \InvalidArgumentException('Invalid HTTP status code.');
        }

        // If the message is an array, convert it to a single string with comma-separated values
        if (is_array($message)) {
            $message = implode(', ', $message);
        }

        // Build the response structure
        $response = [
            'status' => 'error',
            'message' => $message,
        ];

        // Return the JSON response with the specified status code
        return response()->json($response, $statusCode);
    }
}