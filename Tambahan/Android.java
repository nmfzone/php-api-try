HashMap<String, String> loginParams = new HashMap<String, String>();
loginParams.put("name", "Nabil Muhammad Firdaus");
loginParams.put("umur", "20");
loginParams.put("jabatan", "Spesialis Mata");

JsonObjectRequest request_name = new JsonObjectRequest(Method.POST,
        UrlController.loginURL, new JSONObject(loginParams), new Response.Listener<JSONObject>() {
            @Override
            public void onResponse(JSONObject response) {
                try {
                    String message = response.getString("message");
                    Toast.makeText(getApplicationContext(), message, Toast.LENGTH_SHORT).show();
                } catch (JSONException e) {
                    e.printStackTrace();
                    Toast.makeText(getApplicationContext(),
                        "Error: " + e.getMessage(),
                        Toast.LENGTH_LONG).show();
                }
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                VolleyLog.d(TAG, "Error: " + error.getMessage());
                Toast.makeText(getApplicationContext(),
                error.getMessage(), Toast.LENGTH_SHORT).show();
            }
        });

nama_class_ini.getInstance().addToRequestQueue(request_name);
