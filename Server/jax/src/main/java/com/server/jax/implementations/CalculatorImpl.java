package com.server.jax.implementations;

import com.server.jax.services.CalculatorService;
import jakarta.jws.WebService;

@WebService(endpointInterface = "com.server.jax.services.CalculatorService")
public class CalculatorImpl implements CalculatorService {
    @Override
    public int add(int a, int b) {
        return a + b;
    }
}
