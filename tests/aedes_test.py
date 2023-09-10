from .aedes_app import Aedes_app


def test_add():
    assert Aedes_app.add(1, 2) == 3.0
    assert Aedes_app.add(1.0, 2.0) == 3.0
    assert Aedes_app.add(0, 2.0) == 2.0
    assert Aedes_app.add(2.0, 0) == 2.0
    assert Aedes_app.add(-4, 2.0) == -2.0

def test_subtract():
    assert Aedes_app.subtract(1, 2) == -1.0
    assert Aedes_app.subtract(2, 1) == 1.0
    assert Aedes_app.subtract(1.0, 2.0) == -1.0
    assert Aedes_app.subtract(0, 2.0) == -2.0
    assert Aedes_app.subtract(2.0, 0.0) == 2.0
    assert Aedes_app.subtract(-4, 2.0) == -6.0

def test_multiply():
    assert Aedes_app.multiply(1, 2) == 2.0
    assert Aedes_app.multiply(1.0, 2.0) == 2.0
    assert Aedes_app.multiply(0, 2.0) == 0.0
    assert Aedes_app.multiply(2.0, 0.0) == 0.0
    assert Aedes_app.multiply(-4, 2.0) == -8.0

def test_divide():
    assert Aedes_app.divide(1, 2) == 0.5
    assert Aedes_app.divide(1.0, 2.0) == 0.5
    assert Aedes_app.divide(0, 2.0) == 0
    assert Aedes_app.divide(-4, 2.0) == -2.0